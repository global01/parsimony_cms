<?php
namespace core\model;
/**
* Description of entity tag_post
* @author Parsimony
* @top 79px
* @left 315px
*/
class tag_post extends \entity {

    protected $id_tag_post;

    protected $id_tag;

    protected $id_post;



public function __construct(\field_ident $id_tag_post,\field_foreignkey $id_tag,\field_foreignkey $id_post) {
        $this->id_tag_post = $id_tag_post;
        $this->id_tag = $id_tag;
        $this->id_post = $id_post;

}
// DON'T TOUCH THE CODE ABOVE ##########################################################

}
?>