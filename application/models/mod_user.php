<?php
  /**
   *
   */
  class mod_user extends ci_model
  {

    function login($data)
    {
      $query= $this->db->get_where('tbl_user',$data);
      return $query;
    }

    function select_all()
    {
      return $this->db->get('tbl_user');
    }

    function save()
    {
      $data=array(
                  'nama'    => $this->input->post('nama'),
                  'username'=> $this->input->post('username'),
                  'password'=> $this->input->post('password'),
                  'level'   => $this->input->post('level'));
      $this->db->insert('tbl_user',$data);
    }

    function update()
    {
      $data=array(
                  'nama'    => $this->input->post('nama'),
                  'username'=> $this->input->post('username'),
                  'password'=> $this->input->post('password'),
                  'level'   => $this->input->post('level'));
      $this->db->where('id_user',$this->input->post('id'));
      $this->db->update('tbl_user',$data);
    }

  }
 ?>
