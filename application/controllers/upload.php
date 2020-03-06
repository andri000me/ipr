<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
 		echo "<form action='upload/simpan' method='post' enctype='multipart/form-data'>";
 		echo "<input type='file' name='jaslab'>";
 		echo "<button type='submit'>Upload</button>";
 		echo "</form>";
	}

	public function simpan()
	{
        $this->load->library('upload');
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size'] = '500';
        $config['max_width']  = '1288';
        $config['max_height']  = '768';

        $this->upload->initialize($config);

        if ($this->upload->do_upload('app_surat')) 
        {
            echo "berhasil Upload";
        }
        else
        {
            echo "Gagal";
        }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */