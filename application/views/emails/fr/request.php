<?php
/*
 * This file is part of Jorani.
 *
 * Jorani is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jorani is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jorani.  If not, see <http://www.gnu.org/licenses/>.
 */

    //You can change the content of this template
?>
<html lang="fr">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta charset="UTF-8">
        <style>
            table {width:50%;margin:5px;border-collapse:collapse;}
            table, th, td {border: 1px solid black;}
            th, td {padding: 20px;}
            h5 {color:red;}
        </style>
    </head>
    <body>
        <h3>{Title}</h3>
        <p>{Firstname} {Lastname} vous soumet une demande d'absence. Voici les <a href="{BaseUrl}leaves/{LeaveId}">détails</a> :</p>
        <table>
            <tr>
                <td>Du &nbsp;</td><td>{StartDate}&nbsp;({StartDateType})</td>
            </tr>
            <tr>
                <td>Au &nbsp;</td><td>{EndDate}&nbsp;({EndDateType})</td>
            </tr>
            <tr>
                <td>Type &nbsp;</td><td>{Type}</td>
            </tr>
            <tr>
                <td>Durée &nbsp;</td><td>{Duration}</td>
            </tr>
            <tr>
                <td>Crédit &nbsp;</td><td>{Balance}</td>
            </tr>
            <tr>
                <td>Cause &nbsp;</td><td>{Reason}</td>
            </tr>
        </table>
        <br />
        <p>
            <a href="{BaseUrl}requests/accept/{LeaveId}">Accepter</a>&nbsp;
            <a href="{BaseUrl}requests/reject/{LeaveId}">Refuser</a>
        </p>
        <p>Vous pouvez vérifier <a href="{BaseUrl}hr/counters/collaborators/{UserId}">l'état des congés</a> avant de valider cette demande.</p>
        <hr>
        <h5>*** Ceci est un message généré automatiquement, veuillez ne pas répondre à ce message ***</h5>
    </body>
</html>
