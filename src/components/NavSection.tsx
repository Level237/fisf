import { NavLink, useLocation } from "react-router-dom"
import { Separator } from "./ui/separator"

export const NavSection=()=>{
  let location = useLocation(); 
  console.log(location.pathname)
    return (
        <section className="max-sm:hidden">
            <div className='relative mx-36 bg-[#00723e] mt-[-35px]  flex gap-5 flex-row items-center  px-2 py-2 border border-white border-[0.1rem]   z-[9999] '>
          <div className=''>
            <div className='flex  flex-row  justify-between items-center gap-4'>
                <NavLink to="/"  className={`text-2xl ${location.pathname==="/" ? "bg-white text-[#00723e] px-4 py-4" : "text-white"}   cursor-pointer flex  font-bold `}>La FISF</NavLink>
                <Separator className='bg-white h-7 w-1' orientation='vertical'/>
            </div>
          </div>
          <div className=''>
              <div className='flex flex-row justify-between items-center gap-8'>
                  <NavLink to="/actualites"  className={`text-2xl ${location.pathname==="/actualites" ? "bg-white text-[#00723e] px-4 py-4 flex " : "text-white"}   cursor-pointer  font-bold `}>Actualités</NavLink>
                    <Separator className='bg-white h-7 w-1' orientation='vertical' />
                </div>
              
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-center gap-8'>
          <NavLink to="/calendrier"  className={`text-2xl ${location.pathname==="/calendrier" ? "bg-white text-[#00723e] px-4 py-4 flex " : "text-white"}   cursor-pointer  font-bold `}>Calendrier</NavLink>
                <Separator className='bg-white h-7 w-1' orientation='vertical' />
            </div>
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-center gap-8'>
          <NavLink to="/classements"  className={`text-2xl ${location.pathname==="/classements" ? "bg-white text-[#00723e] px-4 py-4 flex " : "text-white"}   cursor-pointer  font-bold `}>Classement</NavLink>
                <Separator className='bg-white h-7 w-1' orientation='vertical' />
            </div>
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-end gap-8'>
              <h2 className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Evènements</h2>
                <Separator className='bg-white h-7 w-1' orientation='vertical' />
            </div>
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-end gap-8'>
              <h2 className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Forum</h2>
                
            </div>
          </div>
</div>
        </section>
    )
}