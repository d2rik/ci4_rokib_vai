<script>
    var loadFile = function(event) {

        var input = event.target;
        var file = input.files[0];
        var type = file.type;

        var output = document.getElementById('preview_img');


        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
<form action="banner_image" method="post" enctype="multipart/form-data">
<?= csrf_field() ?>
    <div class="max-h-52 overflow-hidden flex items-center justify-center">
        <img id="preview_img" class="" src="<?= base_url() . src($site_info['banner_image'], 'banner/small') ?>" alt="">
    </div>
    <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Select Banner Picture
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" onchange="loadFile(event)" type="file" name="banner_image" />
        </div>
    </div>
    <div class="flex justify-end items-center">
        <input class="bg-primary cursor-pointer hover:bg-primary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit" value="Change" />
    </div>
</form>