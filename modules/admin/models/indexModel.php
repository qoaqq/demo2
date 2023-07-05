<?php
function insert_user($data) {
    db_insert('tbl_users', $data);
}
