<?php

    interface IService {
        function insert(Account $account);
        function delete($id);
        function display();
        
    }

?>