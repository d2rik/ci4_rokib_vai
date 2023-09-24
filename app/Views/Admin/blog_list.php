<div class="relative overflow-scroll h-screen shadow-md sm:rounded-lg">
    <div class="my-3 px-4 flex justify-end">
        <a class="bg-primary hover:shadow text-white py-1 px-2 rounded" href="<?= base_url('admin/blog_add') ?>">Add</a>
    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    SN
                </th>
                <th scope="col" class="px-6 py-3">
                    Thumbnail
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $serial = count($blog); ?>
            <?php foreach ($blog as $row) : ?>
                <tr class='bg-white border-b dark:bg-gray-900 dark:border-gray-700'>
                    <td class='px-6 py-4 w-40'>
                        <?= $serial-- ?>
                    </td>
                    <td class='px-6 py-4'>
                        <a href="admin/update_blog_thumbnail"><img class=" w-32" src="<?= base_url('assets/image/blog_image/').$row['thumbnail'] ?>" alt="blog_thumbnail"></a>
                    </td>
                    <td class='px-6 py-4'>
                        <?= $row['title'] ?>
                    </td>
                    <td class='px-6 py-4'>
                        <a href="<?= base_url('admin/blog_edit/') . $row['id'] ?>" class='hover:bg-blue-50 py-2 px-3 rounded-lg font-medium text-blue-600 dark:text-blue-500 hover:underline'>Edit</a>
                    </td>
                    <td class='px-6 py-4'>
                        <a href="<?= base_url('admin/blog_delete/') . $row['id'] ?>" class=' hover:bg-red-600 py-2 px-3 rounded-lg font-medium text-red-600 hover:text-white hover:underline'>Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<script>
    function sure(link) {
        swal({
            title: "Going to Trash!",
            text: "Are you sure?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                window.location.href = link;
                swal("Member Trash!", {
                    icon: "success",
                });
            }
        });
    }
</script>