<?php

    function find_all_visitors(){

        global $db;

        $sql = "SELECT * FROM visitors ";
        $sql .= "ORDER BY from_date ASC";
        $result = mysqli_query($db , $sql);
        confirm_result_set($result, $sql);
        return $result;
    }

    function find_visitor_by_id($id){
        global $db;

        $sql = "SELECT * FROM visitors ";
        $sql .= "WHERE id='" . $id . "'";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result, $sql);

        $visitor = mysqli_fetch_assoc($result);
        mysqli_free_result($result);

        return $visitor;

    }

    function insert_visitor ($name, $phone, $course , $from_date , $to_date){
        global $db;

        $sql = "INSERT INTO visitors ";
        $sql .= "(name, phone, course, from_date, to_date) ";
        $sql .= "VALUES (";
        $sql .= "'" . $name . "', ";
        $sql .= "'" . $phone . "', ";
        $sql .= "'" . $course . "', ";
        $sql .= "'" . $from_date . "', ";
        $sql .= "'" . $to_date . "' ";
        $sql .= ");";
        $result = mysqli_query($db, $sql);

        if($result){
            return true;
        }else {
            echo mysqli_error($db);
            db_disconnect($db);
            exit('</br>' . $sql);
        }
    }

    function update_visitor ($visitor){
        global $db;

        $sql = "Update visitors SET ";
        $sql .= "name='" . $visitor['name'] . "', ";
        $sql .= "phone='" . $visitor['phone'] . "', ";
        $sql .= "course='" . $visitor['course'] . "', ";
        $sql .= "from_date='" . $visitor['from_date'] . "', ";
        $sql .= "to_date='" . $visitor['to_date'] . "' ";
        $sql .= "WHERE id='" . $visitor['id'] . "' ";
        $sql .= "LIMIT 1;";
        $result = mysqli_query($db, $sql);

        if($result){

            return true;

        }else{
            // update failed
            echo mysqli_error($db);
            db_disconnect($db);
            exit('</br>' . $sql);
        }
    }

    function delete_visitor($id){
        global $db;

        $sql = "DELETE FROM visitors ";
        $sql .= "WHERE id='" . $id . "' ";
        $sql .= "LIMIT 1";
        $result = mysqli_query($db, $sql);

        if($result){

            return true;
        }else {
            // delete failed
            echo mysqli_error($db);
            db_disconnect($db);
            exit('</br>' . $sql);
        }
    }