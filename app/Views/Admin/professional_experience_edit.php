<form action="" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Date
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="year" value="<?= $item['year'] ?>">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Title
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="title" value="<?= $item['title'] ?>">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Company
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="company" value="<?= $item['company'] ?>">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Website
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="website" value="<?= $item['website'] ?>">
        </div>
        <div class="mb-4">
            <img class="w-40" src="<?= base_url('assets/image/') . $item['company_logo'] ?>" alt="">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Company logo
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="file" name="company_logo" value="">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Responsibilities
            </label>
            <textarea id="responsibilities" rows="10" name="responsibilities" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"><?= $item['responsibilities'] ?></textarea>
        </div>
    </div>
    <input class="bg-primary cursor-pointer hover:bg-primary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit" value="Save" />
</form>
<script>
    ClassicEditor
        .create(document.querySelector('#responsibilities'), {
            removePlugins: ['CKFinder'],
            toolbar: ['Heading', 'bold', 'italic', 'bulletedList', 'numberedList', 'Link']
        })
        .catch(error => {
            console.log(error);
        });
</script>