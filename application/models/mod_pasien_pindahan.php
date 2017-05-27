<?php
  /**
   *
   */
  class mod_pasien_pindahan extends ci_model
  {

    function select_all()
    {
      $query="SELECT tb1.no_rm,tb1.nama_pasien,tb1.dari_ruang,tb1.dari_kelas,tb1.hari,tb1.tgl_pindahan,tb2.id_ruang,tb2.nama_ruang,tb2.jml_tt,tb3.id_kelas,tb3.nama_kelas,tb4.id_spesialis,tb4.nama_spesialis
              FROM tbl_pasien_pidahan as tb1,tbl_ruang as tb2, tbl_kelas as tb3, tbl_spesialis as tb4
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
                  'dari_ruang'  => $this->input->post('dari_ruang'),
                  'dari_kelas'  => $this->input->post('dari_kelas'),
                  'id_spesialis'=> $this->input->post('spesialis'),
                  'hari'        => $this->input->post('hari'),
                  'tgl_pindahan'=> $this->input->post('tgl_pindahan'));
      $this->db->insert('tbl_pasien_pidahan',$data);
    }

    function update()
    {
      $data=array(
                  'no_rm'       => $this->input->post('no_rm'),
                  'nama_pasien' => $this->input->post('nama_pasien'),
                  'id_ruang'    => $this->input->post('ruang'),
                  'id_kelas'    => $this->input->post('kelas'),
                  'dari_ruang'  => $this->input->post('dari_ruang'),
                  'dari_kelas'  => $this->input->post('dari_kelas'),
                  'id_spesialis'=> $this->input->post('spesialis'),
                  'hari'        => $this->input->post('hari'),
                  'tgl_pindahan'=> $this->input->post('tgl_pindahan'));
      $this->db->where('no_rm',$this->input->post('id'));
      $this->db->update('tbl_pasien_pidahan',$data);
    }

  }
 ?>
