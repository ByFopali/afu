<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item mt-2">
                <a href="#" class="nav-link">
                    <img src="{{asset('img/user.png')}}" alt="list" width="22px">
                    <p class="ml-1 text-center">
                        Користувачі
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <img src="{{asset('img/list.png')}}" alt="list" width="22px">
                    <p class="ml-1 text-center">
                        Довідка військових підрозділів ЗСУ
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item mt-2">
                        <a href="{{route('admin.zsy_types.index')}}" class="nav-link">
                            <img src="{{asset('img/soldier.png')}}" alt="list" width="22px">
                            <p class="ml-1 text-center">
                                Види ЗСУ
                            </p>
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a href="{{route('admin.zsy_lists.index')}}" class="nav-link">
                            <img src="{{asset('img/list1.png')}}" alt="list" width="22px">
                            <p class="ml-1 text-center">
                                Список підрозділів ЗСУ
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <img src="{{asset('img/list.png')}}" alt="list" width="22px">
                    <p class="ml-1 text-center">
                        Довідка військових звань ЗСУ
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item mt-2">
                        <a href="{{route('admin.rank_types.index')}}" class="nav-link">
                            <img src="{{asset('img/soldier.png')}}" alt="list" width="22px">
                            <p class="ml-1 text-center">
                                Тип звання
                            </p>
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a href="{{route('admin.categories.index')}}" class="nav-link">
                            <img src="{{asset('img/categories.png')}}" alt="list" width="22px">
                            <p class="ml-1 text-center">
                                Категорія звання
                            </p>
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a href="#" class="nav-link">
                            <img src="{{asset('img/chevron.png')}}" alt="list" width="22px">
                            <p class="ml-1 text-center">
                                Звання
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
