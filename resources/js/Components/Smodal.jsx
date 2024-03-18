import SpinnerButton from "@/Components/SpinnerButton.jsx";
import '../smodal.css';
const Smodal = ({ title, onClose, children, onSubmit, processing, buttonVariant, buttonName }) => {
    return (
        <div className="modal">
            <div className="modal-overlay"></div>
            <div className="modal-content">
                <div className="modal-header">
                    <h3>{title}</h3>
                    <button onClick={onClose} type="button" className="btn-close"></button>
                </div>
                <div className="modal-body">
                    {children}
                </div>
                <div className="modal-footer">
                    <SpinnerButton btnClass={buttonVariant} handleClick={onSubmit} processing={processing}>{buttonName}</SpinnerButton>
                </div>
            </div>
        </div>
    )
}

export default Smodal;
