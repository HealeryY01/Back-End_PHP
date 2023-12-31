<?php
require 'lib/data.php';
if (isset($_FILES['file'])) {
    show_array($_FILES);
    $error = array();
    $upload_dir = 'uploads/';
//Đường dẫn của file sau khi upload
    $upload_file = $upload_dir . $_FILES['file']['name'];

    #Xử lý upload đúng file ảnh
    $type_allow = array('png', 'jpg', 'gif', 'jpeg');
    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    if (!in_array(strtolower($type), $type_allow)) {
        $error['file_type'] = "Chỉ được upload file ảnh có định dạng png, jpg , gif , jpeg";
    } else {
        #Upload file có kích thước cho phép ( <20mb ~ 20.971.520 byte)
        $file_size = $_FILES['file']['size'];
        if ($file_size > 20971520) {
            $error['file_size'] = "Chỉ được upload file bế hơn 20MB";
        }

        #Kiểm tra trùng file tên hệ thống
        if (file_exists($upload_file)) {
            //========================
            //Xử lý đỏi tên File tự động
            //========================
            #Tạo file mới
            //Tên file.Đuôi file

            $file_name = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
            $new_file_name = $file_name . ' -Copy';
            $new_upload_file = $upload_dir . $new_file_name . $type;
            echo $new_upload_file;
            $k = 1;
            while (file_exists($new_upload_file)) {
                $new_file_name = $file_name . " -Copy({$k}).";
                $k++;
                $new_upload_file = $upload_dir . $new_file_name . $type;
            }
            $upload_file = $new_upload_file;
        }
    }

    if (empty($error)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            echo"<img src='{$upload_file}'/> <br>";
            echo"<a href ='{$upload_file}'> Download:{$_FILES['file']['name']}</a>";
        } else {
            echo "Upload file không thành công ";
        }
    } else {
        show_array($error);
    }
}
?>
<html>
    <head>
        <title>Upload file ảnh lên server</title>
    </head>
    <body>
        <h1>Upload file</h1><!-- comment -->
        <form enctype="multipart/form-data" action="" method="post">
            <input type="file" name="file"/><br><br><!-- comment -->
            <input type="submit" value="Upload file"  />
        </form>
    </body>
</html>



