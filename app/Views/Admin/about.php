<form action="about" method="post">
    <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
        <div class=" mt-3 mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                About
            </label>
            <textarea rows="6" name="about" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"><?= $about_info['about'] ?></textarea>
        </div>
        <div class=" mt-3 mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                Quote
            </label>
            <textarea rows="3" name="quote" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"><?= $about_info['quote'] ?></textarea>
        </div>
        <div class="flex gap-2">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Fun fact 1
                </label>
                <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="fun_fact1" value="<?= $about_info['fun_fact1'] ?>" />
            </div>
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                    Count
                </label>
                <input class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="fun_fact1_count" value="<?= $about_info['fun_fact1_count'] ?>" />
            </div>
        </div>
        <div class="flex gap-2">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Fun fact 2
                </label>
                <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="fun_fact2" value="<?= $about_info['fun_fact2'] ?>" />
            </div>
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                    Count
                </label>
                <input class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="fun_fact2_count" value="<?= $about_info['fun_fact2_count'] ?>" />
            </div>
        </div>
        <div class="flex gap-2">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Fun fact 3
                </label>
                <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="fun_fact3" value="<?= $about_info['fun_fact3'] ?>" />
            </div>
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                    Count
                </label>
                <input class="shadow appearance-none border rounded  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="fun_fact3_count" value="<?= $about_info['fun_fact3_count'] ?>" />
            </div>
        </div>
    </div>
    <div class="flex justify-end items-center">
        <input class="bg-primary cursor-pointer hover:bg-primary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit" value="Save" />
    </div>
</form>