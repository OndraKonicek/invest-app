// import React, { useState } from "react";
// import "./Modal/Modal.css";

// export default function Modal() {
//     const [modal, setModal] = useState(false);

//     const toggleModal = () => {
//         setModal(!modal);
//     };

//     if (modal) {
//         document.body.classList.add("active-modal");
//     } else {
//         document.body.classList.remove("active-modal");
//     }

//     return (
//         <>
//             <button onClick={toggleModal} className="btn-modal">
//                 Login
//             </button>

//             {modal && (
//                 <div className="modal">
//                     <div onClick={toggleModal} className="overlay"></div>
//                     <div className="modal-content">
//                         <h2>Hello Modal</h2>

//                         <form action="/login" method="post">
//                             <input
//                                 type="hidden"
//                                 name="_token"
//                                 value={
//                                     document.getElementById("meta-csrf").value
//                                 }
//                             />
//                             <label class="email-label">Email</label>
//                             <br />
//                             <input
//                                 class="email-input"
//                                 type="email"
//                                 name="email"
//                             />
//                             <br />
//                             <br />
//                             <label class="password-label">Password</label>
//                             <br />
//                             <input
//                                 class="password-input"
//                                 type="password"
//                                 name="password"
//                             />
//                             <br />
//                             <br />
//                             <button class="login-button">Login</button>
//                             <br />
//                             <a href="/register">Register</a>
//                         </form>

//                         <button onClick={toggleModal} className="close-modal">
//                             X
//                         </button>
//                     </div>
//                 </div>
//             )}
//         </>
//     );
// }
