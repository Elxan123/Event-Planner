//dropzone nun dinamik sekilleri yuklemesi
var dropzone_id = document.getElementById("dropzone");
if (dropzone_id){
    var myDropzone = new Dropzone("#dropzone");
    myDropzone.on("success", function(file, response) {
        myDropzone.on("complete", function(file) {
            if (response != "error") {
                $data_url_of_dropzone = $('#dropzone').data("url");
                table.ajax.reload();
            }else{
                myDropzone.removeFile(file);
                notify("Dont exceed the limit")
            }
        });

    });
}