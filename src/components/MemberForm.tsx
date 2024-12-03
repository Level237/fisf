import tof from "../assets/BG-calendrier.jpg";
export const MemberForm=()=>{

    return (
       <section className="container  flex justify-center">
            <section className="grid grid-cols-2">
                    <div className="relative">
                                <img
                            src={tof}
                            alt="Alexis Allagnat"
                            width={200}
                            height={200}
                            className="h-full w-96 object-cover"
                            />
                    </div>
                    <div className="bg-[#00723e] flex flex-col  px-6 py-6">
                                <h2 className="text-white font-bold text-2xl">Devenez Membre</h2>
                    </div>
            </section>
       </section>
    );
}