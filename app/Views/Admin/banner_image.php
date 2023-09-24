<form action="banner_image" method="post" enctype="multipart/form-data" >
<img class="w-full" src="<?= base_url('assets/image/').$site_info['banner_image'] ?>" alt="">
    <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Select Banner Picture
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" name="banner_image"/>
        </div>
    </div>
    <div class="flex justify-end items-center">
        <input class="bg-primary cursor-pointer hover:bg-primary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit" value="Save" />
    </div>
</form>