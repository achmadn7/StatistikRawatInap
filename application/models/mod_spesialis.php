<?php
  /**
   *
   */
  class mod_spesialis extends ci_model
  {

    function select_all()
    {
      return $this->db->get('tbl_spesialis');
    }

    function save()
    {
      $data=array(
                  'nama_spesialis'    => $this->input->post('spesialis'));
      $this->db->insert('tbl_spesialis',$data);
    }

    function update()
    {
      $data=array(
                  'nama_spesialis'    => $this->input->post('spesialis'));
      $this->db->where('id_spesialis',$this->input->post('id'));
      $this->db->update('tbl_spesialis',$data);
    }

  }
 ?>
