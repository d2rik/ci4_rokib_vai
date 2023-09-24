<form action="" method="post" enctype="multipart/form-data">
    <div class="grid grid-cols-1 gap-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Title
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="title" value="<?= $blog['title'] ?>">
        </div>
        <div class=" mt-3 mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                Blog
            </label>
            <textarea rows="10" name="blog" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"><?= $blog['blog'] ?></textarea>
        </div>
        <div class="mb-4">
        <img class="w-52 border" src="<?= base_url('assets/image/blog_image/').$blog['thumbnail'] ?>" alt="">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Thumbnail <span class="text-red-700"> *</span>
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" name="thumbnail">
        </div>
    </div>
    <input class="bg-primary cursor-pointer hover:bg-primary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit" value="Save" />
</form>
