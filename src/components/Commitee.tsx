
export const Commitee=({picture,
    username,name,post,flag}:
    {picture:string,username:string,name:string,post:string,flag:string})=>{

    return (
        <section className="w-64 relative h-96 rounded-3xl bg-slate-400">
               <img src={picture} className="absolute w-full h-full object-cover rounded-3xl" alt="" />
               <div className="bg-red-600 flex flex-col justify-start items-start px-8 pt-4 pb-4 left-0 bottom-0 absolute  w-full h-32 rounded-b-3xl">
                    
                        <div className=" right-0 w-full mx-4  flex items-end justify-end ">
                            <img src={flag} className="w-10 absolute   h-10 " alt="" />
                        </div>
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