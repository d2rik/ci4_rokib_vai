<?php foreach ($test_score_and_certifications as $item) : ?>
    <!-- box -->
    <div class="mt-6">
        <h2 class="text-lg text-primary font-bold">
            <?= esc($item['title']) ?>
        </h2>
        <div>
            <b>Testing Agency: </b><?= esc($item['agency']) ?>
        </div>
        <div>
            <b>Test Date: </b><?= esc($item['date']) ?>
        </div>
        <div>
            <b>Validity & Expiry Date: </b><?= esc($item['expiry_date']) ?>
        </div>
        <div>
            <b>Overall Score: </b><?= esc($item['overall_score']) ?>
        </div>
        <div><b>Score Breakdown: </b></div>
        <div class="relative overflow-x-auto sm:rounded-lg mt-1">
            <table class="text-sm text-left text-gray-600">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            <?= esc($item['breakdown_1']) ?>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <?= esc($item['breakdown_2']) ?>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <?= esc($item['breakdown_3']) ?>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <?= esc($item['breakdown_4']) ?>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <!-- box -->
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">
                            <?= esc($item['breakdown_1_score']) ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= esc($item['breakdown_2_score']) ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= esc($item['breakdown_3_score']) ?>
                        </td>
                        <td class="px-6 py-4">
                            <?= esc($item['breakdown_4_score']) ?>
                        </td>
                    </tr>
                    <!--/box -->

                </tbody>
            </table>
        </div>
        <div class="mt-2">
            <b>Analysis/Remarks: </b> <?= esc($item['analysis']) ?>
        </div>
    </div>
    <!--/box -->
<?php endforeach ?>