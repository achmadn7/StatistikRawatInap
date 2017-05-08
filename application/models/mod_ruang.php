<?php
  /**
   *
   */
  class mod_ruang extends ci_model
  {

    function select_all()
    {
      $query="SELECT tb1.id_ruang,tb1.nama_ruang, tb1.jml_tt,tb2.id_kelas,tb2.nama_kelas
              FROM tbl_ruang as tb1,tbl_kelas as tb2
              WHERE tb1.id_kelas=tb2.id_kelas";
      return $this->db->query($query);
    }

    function select_kelas()
    {
      return $this->db->get_where('tbl_kelas');
    }

    function save()
    {
      $data=array(
                  'nama_ruang'  => $this->input->post('nama_ruang'),
                  'id_kelas'    => $this->input->post('kelas'),
                  'jml_tt'      => $this->input->post('jml_tt'));
      $this->db->insert('tbl_ruang',$data);
    }

    function update()
    {
      $data=array(
                  'nama_ruang'  => $this->input->post('nama_ruang'),
                  'id_kelas'    => $this->input->post('kelas'),
                  'jml_tt'      => $this->input->post('jml_tt'));
      $this->db->where('id_ruang',$this->input->post('id'));
      $this->db->update('tbl_ruang',$data);
    }

  }
?>
