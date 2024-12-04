import form from "../assets/form.jpg";
export const MemberForm=()=>{

    return (
       <section className="container  flex justify-center">
            <section className="grid grid-cols-2">
                    <div className="relative">
                                <img
                            src={form}
                            alt="Contact form"
                            width={200}
                            height={200}
                            className="h-full w-96 object-cover"
                            />
                    </div>
                    <div className="bg-[#00723e] flex flex-col  px-6 py-6">
                                <h2 className="text-white font-bold text-3xl">Devenez Membre</h2>
                                <div className="mt-4 mb-2">
                                    <input type="text" placeholder="Nom" className="w-full px-6  py-4 placeholder:text-xl rounded-full" />
                                </div>
                                <div className="mb-2">
                                    <input type="text" placeholder="Prénom" className="w-full px-6  py-4 placeholder:text-xl rounded-full" />
                                </div>
                                <div className="mb-2">
                                    <input type="text" placeholder="Prénom" className="w-full px-6  py-4 placeholder:text-xl rounded-full" />
                                </div>
                    </div>
            </section>
       </section>
    );
}