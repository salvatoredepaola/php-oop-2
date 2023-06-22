<?php  

trait Publishable {

    public $published = false;

    public function getPublished() {
        return $this->published;
    }

    public function setPublish() {
        $this->published = true;
    }

    public function setUnPublish() {
        $this->published = false;
    }

}

?>