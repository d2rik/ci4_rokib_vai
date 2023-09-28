<div class="relative overflow-scroll h-screen shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Image
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
        </thead>
        <tbody>
            <tr class='bg-white border-b dark:bg-gray-900 dark:border-gray-700'>
                <td class='px-6 py-4'>
                    <img src="<?= base_url('assets/image/') . $item['image'] ?>" alt="">
                </td>
                <td class='px-6 py-4'>
                    <?= $item['description'] ?>
                </td>
                <td class='px-6 py-4'>
                    <a href="<?= base_url('admin/social_works_edit/') . $item['id'] ?>" class='hover:bg-blue-50 py-2 px-3 rounded-lg font-medium text-blue-600 dark:text-blue-500 hover:underline'>Edit</a>
                </td>
                <td class='px-6 py-4'>
                    <button onclick='sure("<?= base_url("admin/social_works_delete/") . $item["id"] ?>")' class=' hover:bg-red-600 py-2 px-3 rounded-lg font-medium text-red-600 hover:text-white hover:underline'>Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<script>
    function sure(link) {
        swal({
            title: "Going to Permanently Delete!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                window.location.href = link;
                swal("Permanently Deleted!", {
                    icon: "success",
                });
            }
        });
    }
</script>