import DashboardLayout from "@/Layouts/DashboardLayout.jsx";
import Pagination from "@/Components/Pagination.jsx";
import {Head, router} from "@inertiajs/react";
import Swal from "sweetalert2";
import successToast from "@/SweetAlerts/SuccessToast.js";
import {useRef} from "react";
import {debounce} from 'lodash';

const InboxIndex = ({mails}) => {

    const showAlert = (id) => {
        Swal.fire({
            title: 'Are you sure?',
            text: `You will not be able to recover this ${id}`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.value) {
                router.delete(route('inbox.destroy', id))
                successToast('Deleted Successfully')
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                // User clicked cancel button
            }
        });
    }

    const searchRef = useRef("");

    const prevSearchRef = useRef("");

    const debouncedSetSearch = debounce((value) => {
        searchRef.current = value;
        if (value !== prevSearchRef.current) {
            prevSearchRef.current = value;
            router.get(route('inbox.index'), {search: value}, {
                preserveState: true,
                replace: true
            });
        }
    }, 300);

    return (
        <DashboardLayout>
            <Head><title>Inbox</title></Head>
            <div className="card __web-inspector-hide-shortcut__">
                <div className="card-header">
                    <div className="row">
                        <div className="col-4">
                            <h6> Search </h6>
                            <input onChange={(e) => debouncedSetSearch(e.target.value)} type="search"
                                   className="form-control rounded" placeholder="Search"
                                   aria-label="Search" aria-describedby="search-addon"/>
                        </div>
                    </div>
                </div>
                <div className="table-responsive text-nowrap">
                    <table className="table table-hover">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tbody className="table-border-bottom-0">
                        {mails.data && mails.data.map((mail, index) => (
                            <tr key={index}>
                                <td><strong>{mail.id}</strong></td>
                                <td>{mail.name}</td>
                                <td>{mail.email}</td>
                                <td>{mail.phone}</td>
                                <td>
                                    <div className="row">
                                        <div className="col-6">
                                            <button
                                                type="button"
                                                onClick={() => showAlert(mail.id)}
                                                className="btn btn-danger mx-1">Delete
                                            </button>
                                            <button
                                                type="button"
                                                className="btn btn-warning mx-1"
                                                onClick={() => router.get(route('inbox.show', mail.id))}>
                                                Detail
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        ))}
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
                <Pagination
                    links={mails.links}
                    firstPageUrl={mails.links.first_page_url}
                    lastPageUrl={mails.links.last_page_url}
                    lastPageCheck={mails.links.last_page}
                />
            </div>
        </DashboardLayout>
    )
}
export default InboxIndex;
