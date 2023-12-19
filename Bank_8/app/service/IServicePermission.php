<?php

    interface IService {
        function insert(Permission $permission);
        function delete($id);
        function display();
        
    }

?>