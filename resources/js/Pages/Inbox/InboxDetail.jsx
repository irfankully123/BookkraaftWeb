import DashboardLayout from "@/Layouts/DashboardLayout.jsx";
import { Head, Link } from "@inertiajs/react";

const InboxDetail = ({ mail }) => {

    return (
        <DashboardLayout>
            <Head><title>Inbox | Mail</title></Head>
            <div className="card mb-4">
                <div className="card-header d-flex justify-content-between align-items-center">
                    <h5 className="mb-0">Mail</h5>
                    <small className="text-muted float-end">
                        <Link href={route('inbox.index')}>Back</Link>
                    </small>
                </div>
                <div className="card-body">
                    <div className="row gy-3">

                        <div className="col-12 col-md-6">
                            <div className="form-group">
                                <label className="form-label" htmlFor="basic-default-name">Full Name</label>
                                <input value={mail.name} type="text" className="form-control" disabled={true} id="basic-default-fullname" />
                            </div>
                        </div>
                        <div className="col-12 col-md-6">
                            <div className="form-group">
                                <label className="form-label" htmlFor="basic-default-email">Email</label>
                                <div className="input-group input-group-merge">
                                    <input value={mail.email} type="text" id="basic-default-email" disabled={true} className="form-control"
                                        aria-describedby="basic-default-email2" />
                                </div>
                            </div>
                        </div>
                        <div className="col-12 col-md-6">
                            <div className="form-group">
                                <label className="form-label" htmlFor="basic-default-phone">Phone</label>
                                <input value={mail.phone} type="text" id="basic-default-phone" disabled={true} className="form-control phone-mask" />
                            </div>
                        </div>
                        <div className="col-12">
                            <div className="form-group">
                                <label className="form-label" htmlFor="basic-default-message">Project Detail</label>
                                <textarea value={mail.project_detail} rows={7} id="basic-default-message" disabled={true} className="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </DashboardLayout>
    )
}
export default InboxDetail;
