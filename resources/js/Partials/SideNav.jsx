import { Link, usePage } from "@inertiajs/react";
import axios from "axios";
const SideNav = () => {

    const { url } = usePage()

    const updateInertiaRootClass = () => {
        const dynamicClass = 'layout-menu-expanded';
        document.documentElement.classList.remove(dynamicClass);
    }

    const handleLogout = async () => {
        try {
            const response = await axios.post(route('logout'));
            if (response.status === 200) {
                window.location.href = '/';
            }
        } catch (error) {
            console.error('Logout failed:', error);
        }
    };

    return (
        <aside id="layout-menu" className="layout-menu menu-vertical menu bg-menu-theme">
            <div className="app-brand demo">
                <a href="#" className="app-brand-link">
                    <span className="app-brand-logo demo">
                        <img src="/assets/xyberix.jpg" alt='Logo' style={{ height: '50px', width: '50px' }}></img>
                    </span>
                    <span>BookKraaft</span>
                </a>
                <a onClick={updateInertiaRootClass} href="#"
                    className="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i className="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>
            <div className="menu-inner-shadow"></div>
            <ul className="menu-inner py-1">
                <li className={url.startsWith('/dashboard/home') ? 'menu-item active' : 'menu-item'}>
                    <Link href={route('home.index')} className="menu-link">
                        <i className="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Home</div>
                    </Link>
                </li>
                <li className={url.startsWith('/dashboard/appuser') ? 'menu-item active' : 'menu-item'}>
                    <Link href={route('appuser.index')} className="menu-link">
                        <i className="menu-icon tf-icons bx bx-user"></i>
                        <div data-i18n="Analytics">App Users</div>
                    </Link>
                </li>
                <li className={url.startsWith('/dashboard/inbox') ? 'menu-item active' : 'menu-item'}>
                    <Link href={route('inbox.index')} className="menu-link">
                        <i className="menu-icon tf-icons bx bx-mail-send"></i>
                        <div data-i18n="Analytics">Inbox</div>
                    </Link>
                </li>
                <li className="menu-item">
                    <a type="button" onClick={handleLogout} className="menu-link" >
                        <i className="bx bx-power-off me-2"></i>
                        <span className="align-middle">Log Out</span>
                    </a>
                </li>
            </ul>
        </aside>
    );
}
export default SideNav;
