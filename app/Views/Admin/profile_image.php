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
<form action="profile_image" method="post" enctype="multipart/form-data">
    <div class="h-[130px] w-[100px] overflow-hidden flex items-center justify-center">
        <img class="h-full max-w-fit" id="preview_img" src="<?= base_url() . src($site_info['profile_image'], 'profile/small') ?>" alt="">
    </div>
    <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Select Profile Picture
            </label>
            <input onchange="loadFile(event)" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" name="profile_image" />
        </div>
    </div>
    <div class="flex justify-end items-center">
        <input class="bg-primary cursor-pointer hover:bg-primary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit" value="Change" />
    </div>
</form>