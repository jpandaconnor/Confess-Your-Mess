<?php
/**
 * Created by PhpStorm.
 * User: JPanda
 * Date: 13/11/2017
 * Time: 21:08
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Sin_Model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get_confessions() {
        $db = $this->load->database('default', TRUE);

        $query = $db->query("SELECT * FROM confessions")->result();

        $db->close();
        return $query;

    }

    // Returns the amount of confessions in the database
    public function get_confession_count() {
        $db = $this->load->database('default', TRUE);

        $query = $db->query("SELECT COUNT(*) AS amount FROM confessions;");

        return $query->row();
        $db->close();
    }

    // Returns a certain confession
    public function get_confession($id) {
        $db = $this->load->database('default', TRUE);

        $query = $db->query("SELECT confession,date(date_created) AS date_created FROM confessions WHERE id = '$id'");

        return $query->row();
        $db->close();
    }

    // Puts a confession in the database
    public function confess($confession) {
        $db = $this->load->database('default', TRUE);

        $date = date('Y-m-d H:i:s');

        $query = $db->query("INSERT INTO confessions (confession, date_created) VALUES ('$confession', '$date')");

        return $db->affected_rows() > 0;
        $db->close();
    }
}

?>