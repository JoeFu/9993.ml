<?php

/** AService is supporting APIs **/
// Load Activity Numbers function
class APIService
{
    function Load_IndexPage_IMG()
    {
        include_once('one_connection.php');
        
        $sql = "SELECT FROM ";
        $query = mysql_query($sql);
        $result = mysql_fetch_array($query);
        $res = $result[0];
    }

}

?>