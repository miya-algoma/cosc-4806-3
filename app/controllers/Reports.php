<?php

class Reports extends Controller {

    public function index() {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM log ORDER BY timestamp DESC");
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

        $this->view('reports/index', $rows);
    }
}
