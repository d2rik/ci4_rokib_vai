<form action="about" method="post">
    <?= csrf_field() ?>
    <div class="grid">
        <div class=" mt-3 mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                About
            </label>
            <textarea id="aboutarea" rows="6" name="about" class="remove_tailwind_style block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"><?= $about_info['about'] ?></textarea>

        </div>
    </div>
    <div class="flex justify-end items-center">
        <input class="bg-primary cursor-pointer hover:bg-primary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit" value="Save" />
    </div>
</form>
<script>
    ClassicEditor
        .create(document.querySelector('#aboutarea'), {
            removePlugins: ['CKFinder'],
            toolbar: ['Heading', 'bold', 'italic', 'bulletedList', 'numberedList', 'Link']
        })
        .catch(error => {
            console.log(error);
        });
</script>