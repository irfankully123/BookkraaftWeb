import DashboardLayout from "@/Layouts/DashboardLayout.jsx";
import { useState } from "react";
import { Head, Link, useForm } from "@inertiajs/react";
import Smodal from "@/Components/Smodal.jsx";
import Swal from 'sweetalert2';
import { router } from "@inertiajs/react";
import successToast from "@/SweetAlerts/SuccessToast";
const AppUsersIndex = ({ users, permissions }) => {

    const [modalState, setModalState] = useState({ assignPermission: false, revokePermission: false });

    const { data, setData, post, processing, errors, reset, clearErrors } = useForm({
        permission: '',
        hiddenId: null,
    })

    const handleAssignPermission = () => {
        post(route('appuser.assign', data.hiddenId), {
            onSuccess: () => {
                successToast('Permission Assigned');
                reset();
                clearErrors();
                setModalState((prevState) => ({ ...prevState, assignPermission: false, revokePermission: false }));
            }
        });
    }

    const handleRevokePermission = () => {
        post(route('appuser.revoke', data.hiddenId), {
            onSuccess: () => {
                successToast('Permission Revoked');
                reset();
                clearErrors();
                setModalState((prevState) => ({ ...prevState, assignPermission: false, revokePermission: false }));
            }
        });
    }

    const handleDelete = (id) => router.delete((route('appuser.destroy', id)));



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
                handleDelete(id);
                successToast('Appuser Deleted Successfully')
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                // User clicked cancel button
            }
        });
    }

    return (
        <DashboardLayout>
            {modalState.assignPermission &&
                <Smodal
                    key="smodalCreate"
                    buttonVariant="btn btn-primary"
                    title="Assign Permission"
                    processing={processing}
                    onSubmit={handleAssignPermission}
                    buttonName="Assign"
                    onClose={() => { setModalState((prevState) => ({ ...prevState, assignPermission: false })); reset(); clearErrors() }}>
                    <div className="row mb-3">
                        <label className="col-sm-2 col-form-label">Name</label>
                        <div className="col-sm-10">
                            <select onChange={(e) => setData((prevState) => ({ ...prevState, permission: e.target.value }))} className="form-select" aria-label="Default select example">
                                <option value="0">Select</option>
                                {permissions && permissions.map((permission, index) => (
                                    <option key={index}>{permission.name}</option>
                                ))}
                            </select>
                            <span className="text-danger">{errors.permission}</span>
                        </div>
                    </div>
                </Smodal>}
            {modalState.revokePermission &&
                <Smodal
                    key="smodalUpdate"
                    buttonVariant="btn btn-danger"
                    title="Revoke Permission"
                    onSubmit={handleRevokePermission}
                    buttonName="Revoke"
                    processing={processing}
                    onClose={() => { setModalState((prevState) => ({ ...prevState, revokePermission: false })); reset(); clearErrors() }}>
                    <div className="row mb-3">
                        <label className="col-sm-2 col-form-label">Name</label>
                        <div className="col-sm-10">
                            <select onChange={(e) => setData((prevState) => ({ ...prevState, permission: e.target.value }))} className="form-select" aria-label="Default select example">
                                <option value="0">Select</option>
                                {permissions && permissions.map((permission, index) => (
                                    <option key={index}>{permission.name}</option>
                                ))}
                            </select>
                            <span className="text-danger">{errors.permission}</span>
                        </div>
                    </div>
                </Smodal>}
            <Head><title>App Users</title></Head>
            <div className="card __web-inspector-hide-shortcut__">
                <div className="card-header">
                    <Link href={route('appuser.create')} type="button" className="btn btn-success">Create</Link>
                </div>
                <div className="table-responsive text-nowrap">
                    <table className="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>id</th>
                                <th>profile</th>
                                <th>name</th>
                                <th>email</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody className="table-border-bottom-0">
                            {users.map((user, index) => (
                                <tr key={index}>
                                    <td>{index + 1}</td>
                                    <td><i className="fab fa-angular fa-lg text-danger me-3"></i><strong>{user.id}</strong></td>
                                    <td>
                                        {user.profile != null ?
                                            <img src={`/storage/users/${user.profile}`}
                                                alt="userprofile"
                                                className="w-px-40 h-auto rounded-circle" />
                                            :
                                            <img src="https://st3.depositphotos.com/6672868/13701/v/450/depositphotos_137014128-stock-illustration-user-profile-icon.jpg"
                                                alt="userprofile"
                                                className="w-px-40 h-auto rounded-circle" />
                                        }
                                    </td>
                                    <td>{user.name}</td>
                                    <td>{user.email}</td>
                                    <td>
                                        <div className="row">
                                            <div className="col-6 ">
                                                <Link
                                                    href={route('appuser.edit', user.id)}
                                                    type="button"
                                                    className="btn btn-warning mx-1">
                                                    Edit
                                                </Link>
                                                <Link
                                                    href={route('appuser.show', user.id)}
                                                    className="btn btn-dark mx-1"
                                                    type="button">
                                                    Permissions
                                                </Link>
                                                <button
                                                    onClick={() => {
                                                        setModalState((prevState) => ({ ...prevState, assignPermission: true }));
                                                        setData((prevState) => ({ ...prevState, hiddenId: user.id, permission: '' }))
                                                    }}
                                                    type="button"
                                                    className="btn btn-primary mx-1">
                                                    Assign Permission
                                                </button>
                                                <button
                                                    onClick={() => {
                                                        setModalState((prevState) => ({ ...prevState, revokePermission: true }));
                                                        setData((prevState) => ({ ...prevState, hiddenId: user.id, permission: '' }))
                                                    }}
                                                    type="button"
                                                    className="btn btn-danger mx-1">
                                                    Revoke Permission
                                                </button>
                                                <button
                                                    onClick={() => showAlert(user.id)}
                                                    type="button"
                                                    className="btn btn-danger mx-1">
                                                    Delete
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
        </DashboardLayout>
    );
}
export default AppUsersIndex;
