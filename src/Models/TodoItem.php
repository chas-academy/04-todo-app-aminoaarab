<?php

namespace Todo;
//AMINAMINAMINAMIN
class TodoItem extends Model
{
    const TABLENAME = 'todos'; // This is used by the abstract model, don't touch

    public static function createTodo($title)
    {
    }

    public static function updateTodo($todoId, $title, $completed = null)
    {
        
    }

    public static function deleteTodo($todoId)
    {
    }
    
    //(Optional bonus methods below)
    // public static function toggleTodos($completed)
    // {
    //     // TODO: Implement me!
    //     // This is to toggle all todos either as completed or not completed

    // }

    // public static function clearCompletedTodos($todoId)
    // {
    //     // TODO: Implement me!
    //     // This is to delete all the completed todos from the database

    //     $query = "DELETE FROM todos 
    //     WHERE id = '$todoId'";

    //     self::$db->query($query);
    //     $result = self::$db->execute();

    //     return $result; 
    // }

}