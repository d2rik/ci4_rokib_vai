<div class=" text-red-600"><?= validation_list_errors() ?></div>
<form action="" method="post">
    <div class="grid grid-cols-1 gap-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Username
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="username" value="<?= set_value('username') ?>">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Password
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" value="<?= set_value('password') ?>">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Confirm Password
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" name="con_password" value="<?= set_value('con_password') ?>">
        </div>
    </div>
    <input class="bg-primary cursor-pointer hover:bg-primary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit" value="Register" />
</form>