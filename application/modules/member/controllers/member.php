<?php
class Member extends Controller {

       function Member()
       {
            parent::Controller();

            $this->load->scaffolding('member');
       }
}

/* End of file member.php */
/* Location: ./application/modules/member.php */