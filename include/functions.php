<?php
   require_once ('MysqliDb.php');
   //DEFINE (BASE_URL, 'https://www.domain.com/');
   error_reporting(E_ALL);
   $action = 'tours';
   $data = array();
   //global $db;
   
   $db = new MysqliDb (Array (
                   'host' => 'localhost',
                   'username' => 'u179476470_matu', 
                   'password' => 'Matr@2019#',
                   'db'=> 'u179476470_matri',
                   'port' => 3306,
                   'prefix' => '',
                   'charset' => 'utf8'));
   
    
   //Example
   function printUsers () {
       global $db;
       $users = $db->get ("mother_tongue");
       if ($db->count == 0) {
           echo "<td align=center colspan=4>No users found</td>";
           return;
       }
       foreach ($users as $u) {
           echo "<tr>
               <td>{$u['mtongue']}</td>
               <td>{$u['mtongue']}</td>
               <td>{$u['mtongue']} {$u['mtongue']}</td>
               <td>
                   <a href='index.php?action=rm&id={$u['mtongue']}'>rm</a> ::
                   <a href='index.php?action=mod&id={$u['mtongue']}'>ed</a>
               </td>
           </tr>";
       }
   }
?>