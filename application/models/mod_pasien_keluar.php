<?php
  /**
   *
   */
  class mod_pasien_keluar extends ci_model
  {

    function select_all()
    {
      $query="SELECT tb1.no_rm,tb1.nama_pasien,tb1.tgl_masuk,tb1.cara_keluar,tb1.tgl_keluar,tb2.id_ruang,tb2.nama_ruang,tb2.jml_tt,tb3.id_kelas,tb3.nama_kelas,tb4.id_spesialis,tb4.nama_spesialis
              FROM tbl_pasien_keluar as tb1,tbl_ruang as tb2, tbl_kelas as tb3, tbl_spesialis as tb4
              WHERE tb1.id_ruang=tb2.id_ruang and tb1.id_kelas=tb3.id_kelas and tb1.id_spesialis=tb4.id_spesialis";
      return $this->db->query($query);
    }

    function select_ruang()
    {
      return $this->db->get_where('tbl_ruang');
    }

    function select_kelas()
    {
      return $this->db->get_where('tbl_kelas');
    }

    function select_spesialis()
    {
      return $this->db->get_where('tbl_spesialis');
    }

    function save()
    {
      $data=array(
                  'no_rm'       => $this->input->post('no_rm'),
                  'nama_pasien' => $this->input->post('nama_pasien'),
                  'id_ruang'    => $this->input->post('ruang'),
                  'id_kelas'    => $this->input->post('kelas'),
                  'tgl_masuk '  => $this->input->post('tgl_masuk'),
                  'id_spesialis'=> $this->input->post('spesialis'),
                  'cara_keluar' => $this->input->post('cara_keluar'),
                  'tgl_keluar'  => $this->input->post('tgl_keluar'));
      $this->db->insert('tbl_pasien_keluar',$data);
    }

    function update()
    {
      $data=array(
                  'no_rm'       => $this->input->post('no_rm'),
                  'nama_pasien' => $this->input->post('nama_pasien'),
                  'id_ruang'    => $this->input->post('ruang'),
                  'id_kelas'    => $this->input->post('kelas'),
                  'id_spesialis'=> $this->input->post('spesialis'),
                  'cara_keluar' => $this->input->post('cara_keluar'),
                  'tgl_keluar'  => $this->input->post('tgl_keluar'));
      $this->db->where('no_rm',$this->input->post('id'));
      $this->db->update('tbl_pasien_keluar',$data);
    }

  }     
 ?>
