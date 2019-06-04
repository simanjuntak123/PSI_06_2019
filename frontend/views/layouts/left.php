<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'RKA', 'icon' => 'file', 'url' => ['/rka/index']],
                    ['label' => 'Dana Bulanan', 'icon' => 'money', 'url' => ['/dana-bulanan/index']],
                    ['label' => 'Permintaan Dana', 'icon' => 'money', 'url' => ['/permintaan-dana/index']],
                    ['label' => 'Laporan Dana', 'icon' => 'file', 'url' => ['/laporan-dana/index']],
                ],
            ]
        ) ?>

    </section>

</aside>
