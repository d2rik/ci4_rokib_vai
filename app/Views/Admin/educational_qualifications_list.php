<div class="relative overflow-scroll h-screen shadow-md sm:rounded-lg">
    <div class="my-3 px-4 flex justify-end">
        <a class="bg-primary hover:shadow text-white py-1 px-2 rounded" href="<?= base_url('admin/educational_qualifications_add') ?>">Add</a>
    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    SN
                </th>
                <th scope="col" class="px-6 py-3">
                    Degree
                </th>
                <th scope="col" class="px-6 py-3">
                    Subject
                </th>
                <th scope="col" class="px-6 py-3">
                    Academy
                </th>
                <th scope="col" class="px-6 py-3">
                    session
                </th>
                <th scope="col" class="px-6 py-3">
                    Passing Year
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
            <?php $serial = count($items); ?>
            <?php foreach ($items as $row) : ?>
                <tr class='bg-white border-b dark:bg-gray-900 dark:border-gray-700'>
                    <td class='px-6 py-4'>
                        <?= $serial-- ?>
                    </td>
                    <td class='px-6 py-4'>
                        <?= $row['degree'] ?>
                    </td>
                    <td class='px-6 py-4'>
                        <?= $row['subject'] ?>
                    </td>
                    <td class='px-6 py-4'>
                        <?= $row['academy'] ?>
                    </td>
                    <td class='px-6 py-4'>
                        <?= $row['session'] ?>
                    </td>
                    <td class='px-6 py-4'>
                        <?= $row['passing_year'] ?>
                    </td>
                    <td class='px-6 py-4'>
                        <a href="<?= base_url('admin/educational_qualifications_edit/') . $row['id'] ?>" class='hover:bg-blue-50 py-2 px-3 rounded-lg font-medium text-blue-600 dark:text-blue-500 hover:underline'>Edit</a>
                    </td>
                    <td class='px-6 py-4'>
                        <button onclick='sure("<?= base_url("admin/educational_qualifications_delete/") . $row["id"] ?>")' class=' hover:bg-red-600 py-2 px-3 rounded-lg font-medium text-red-600 hover:text-white hover:underline'>Delete</button>
                    </td>
                </tr>
            <?php endforeach ?>
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