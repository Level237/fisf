
export const Commitee=({picture,
    username,name,post}:
    {picture:string,username:string,name:string,post:string})=>{

    return (
        <section className="w-64 relative h-96 rounded-3xl bg-slate-400">
               <img src={picture} className="absolute w-full h-full object-cover rounded-3xl" alt="" />
               <div className="bg-red-600 flex flex-col justify-start items-start px-8 pt-4 pb-4 left-0 right-0 bottom-0  absolute h-32 rounded-b-3xl">
                        <div>
                            <h2 className="text-lg text-white font-semibold">{username}</h2>
                        </div>
                        <div className="mt-[-10px]">
                            <h2 className="text-3xl text-white font-bold">{name}</h2>
                        </div>
                        <div className="mb-4">
                            <h2 className="text-sm leading-[1rem]">{post}</h2>
                        </div>
               </div>
        </section>
    )
}