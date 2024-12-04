import form from "../assets/form.jpg";
import { Button } from "./ui/button";
export const MemberForm=()=>{

    return (
       <section className="container mt-8  flex justify-center">
            <section className="grid grid-cols-2">
                    <div className="relative h-full bg-red-500">
                                <img
                            src={form}
                            alt="Contact form"
                            width={200}
                            height={200}
                            className="absolute h-full w-full object-cover"
                            />
                    </div>
                    <div className="bg-[#00723e] flex flex-col w-[28rem]  px-6 py-10">
                                <h2 className="text-white font-bold text-3xl">Devenez Membre</h2>
                                <div className="mt-4 mb-2">
                                    <input type="text" placeholder="Nom" className="w-full px-6  py-4 placeholder:text-xl rounded-full" />
                                </div>
                                <div className="mb-2">
                                    <input type="text" placeholder="Prénom" className="w-full px-6  py-4 placeholder:text-xl rounded-full" />
                                </div>
                                <div className="mb-2">
                                        <select name='nationality' id="states" className="w-full px-6  py-4 placeholder:text-xl rounded-full border border-gray-300 text-gray-900 text-sm  border-s-gray-100 dark:border-s-gray-700 border-s-2 focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option className='title-second ' selected>Nationalité</option>

                                                <option className='title-second max:sm:text-2xl' value='cameroon'>Cameroon</option>
                
                                        </select>
                                </div>
                                <div className="mb-2">
                                    <input type="email" placeholder="Email" className="w-full px-6  py-4 placeholder:text-xl rounded-full" />
                                </div>

                                <div className="mb-2 w-full flex flex-row items-baseline gap-3">
                                    <input type="checkbox"  name="condition" value="Bike"/>
                                                                    <p className="text-sm w-96 ">

                                                                    Lorem ipsum dolor sit amet, consectetur

                            adipiscing elit, sed do eiusmod tempor

                            incididunt ut labore</p>
                                </div>
                                <div className="flex justify-end">
                                <Button
                  className="bg-red-500 text-lg hover:bg-red-600 text-white rounded-full py-6 px-6"
                >
                  S'inscrire
                </Button>
                                </div>
                    </div>
            </section>
       </section>
    );
}