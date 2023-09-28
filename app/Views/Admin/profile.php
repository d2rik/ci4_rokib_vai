<form action="profile" method="post">
    <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Name <span class="text-red-700"> *</span>
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="name" value="<?= $site_info['name'] ?>" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Date of birth <span class="text-red-700"> *</span>
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="date_of_birth" value="<?= $site_info['date_of_birth'] ?>" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Designation <span class="text-red-700"> *</span>
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="designation" placeholder="e.g Writer, Researcher" value="<?= $site_info['designation'] ?>" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Facebook
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" value="<?= $site_info['link1'] ?>" name="link1">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Twitter
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="link2" value="<?= $site_info['link2'] ?>">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                linkedin
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="link3" <?= $site_info['link3'] ?>>
        </div>
    </div>
    <div class="flex justify-end items-center">
        <input class="bg-primary cursor-pointer hover:bg-primary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit" value="Change" />
    </div>
</form>