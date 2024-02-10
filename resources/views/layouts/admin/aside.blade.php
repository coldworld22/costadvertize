<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/img/logo.png') }}" alt="DealDay Logo" class="img-fluid"
                    style="max-width: 50px; max-height: 55px;">
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">
                <p style="font-family: 'Brush Script MT', cursive;">𝒹𝑒𝒶𝓁𝒹𝒶𝓎<sup>&reg;</sup></p>
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Dashboards</div>

            </a>

        </li>

        <!-- Layouts -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Products</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="layouts-without-menu.html" class="menu-link">
                        <div data-i18n="Without menu">Add New Products</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-without-navbar.html" class="menu-link">
                        <div data-i18n="Without navbar">All Products</div>
                    </a>
                </li>
        </li>
    </ul>
    </li>

    <!-- Categories  -->
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-store"></i>
            <div data-i18n="Front Pages">Categories</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <!-- Link to create a new category -->
                <a href="{{ route('admin.categories.create') }}" class="menu-link">
                    <div data-i18n="Landing">Add New Category</div>
                </a>
            </li>
            <li class="menu-item">
                <!-- Link to view all categories -->
                <a href="{{ route('admin.categories.index') }}" class="menu-link">
                    <div data-i18n="Pricing">All Categories</div>
                </a>
            </li>
        </ul>
    </li>

    <!-- Stores  -->
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-store"></i>
            <div>Stores</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <!-- Updated route name to match defined routes -->
                <a href="{{ route('admin.stores.create') }}" class="menu-link">
                    <div>Add New Store</div>
                </a>
            </li>
            <li class="menu-item">
                <!-- Updated route name to match defined routes -->
                <a href="{{ route('admin.stores.index') }}" class="menu-link">
                    <div>All Stores</div>
                </a>
            </li>
        </ul>
    </li>


    <!-- Customers -->
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-user"></i>
            <div data-i18n="Customers">Customers</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="customers-list.html" class="menu-link">
                    <div data-i18n="Customer List">Customer List</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="customer-reviews.html" class="menu-link">
                    <div data-i18n="Customer Reviews">Customer Reviews</div>
                </a>
            </li>

        </ul>
    </li>
    <!-- Social Marketing -->
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Social Marketing</span>
    </li>
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-share-alt"></i>
            <div data-i18n="Social Marketing">Social Marketing</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="marketing-facebook.html" class="menu-link">
                    <div data-i18n="Facebook Marketing">Facebook Messenger</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="marketing-whatsapp.html" class="menu-link">
                    <div data-i18n="WhatsApp Marketing">WhatsApp</div>
                </a>
            </li>
            <!-- Add more social platforms as needed -->
        </ul>
    </li>
    <!-- Settings -->
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Settings</span>
    </li>
    <li class="menu-item">
        <a href="site-settings.html" class="menu-link">
            <i class="menu-icon tf-icons bx bx-cog"></i>
            <div data-i18n="Site Settings">Site Settings</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="payment-settings.html" class="menu-link">
            <i class="menu-icon tf-icons bx bx-credit-card"></i>
            <div data-i18n="Payment Settings">Payment Settings</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="social-settings.html" class="menu-link">
            <i class="menu-icon tf-icons bx bx-share-alt"></i>
            <div data-i18n="Social Settings">Social Login Settings</div>
        </a>
    </li>

    <!-- Support and Documentation -->
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Support</span>
    </li>
    <li class="menu-item">
        <a href="support.html" class="menu-link">
            <i class="menu-icon tf-icons bx bx-support"></i>
            <div data-i18n="Support">Support</div>
        </a>
    </li>
    <li class="menu-item">
        <a href="documentation.html" class="menu-link">
            <i class="menu-icon tf-icons bx bx-file"></i>
            <div data-i18n="Documentation">Documentation</div>
        </a>
    </li>




</aside>
