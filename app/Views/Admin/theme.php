<form action="theme" method="post">
<?= csrf_field() ?>
    <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">
                Color <span class="text-red-700"> *</span>
            </label>
            <input class="shadow appearance-none border rounded" type="color" name="color" value="<?= $theme['color'] ?>" required>
        </div>

    </div>
    <input class="bg-primary cursor-pointer hover:bg-primary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit" value="Save" />
</form>