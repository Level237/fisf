import { Link, NavLink, useLocation } from "react-router-dom"
import { Separator } from "./ui/separator"
import React from "react";
import { AnimatePresence,motion } from "framer-motion";

export const NavSection=()=>{
  let location = useLocation(); 
  const [isHovered, setIsHovered] = React.useState(false);
    return (
        <section className="max-sm:hidden">
            <div className='relative mx-36 bg-[#00723e] mt-[-35px]  flex gap-5 flex-row items-center  px-2 py-2 border border-white border-[0.1rem]   z-[9999] '>
          <div className=''>
            <div onMouseEnter={() => setIsHovered(true)}
                onMouseLeave={() => setIsHovered(false)} className='flex relative  flex-row  justify-between items-center gap-4'>
                <NavLink to="/"  className={`text-2xl ${location.pathname==="/" ? "bg-white text-[#00723e] px-4 py-4" : "text-white px-4 py-4"} ${location.pathname==="/mot-du-president" ? " text-[#00723e] px-4 py-4" : "text-white"}   cursor-pointer flex  font-bold `}>La FISF</NavLink>
                <Separator className='bg-white h-7 w-1' orientation='vertical'/>
                <AnimatePresence>
          {isHovered && (
            <motion.div
              initial={{ opacity: 0, y: 10 }}
              animate={{ opacity: 1, y: 0 }}
              exit={{ opacity: 0, y: 10 }}
              transition={{ duration: 0.2 }}
              className="absolute top-[3rem] left-[-6rem] w-48 bg-white border border-white border-[0.1rem] shadow-lg py-2 z-50"
            >
              
                <Link
                  key={"mot-president"}
                  to={"/mot-du-president"}
                  className="block px-4 py-2 text-sm text-[#00723e] font-bold hover:bg-emerald-50 hover:text-emerald-700 transition-colors"
                >
                  Mot du président
                </Link>
                <Link
                  key={"mission"}
                  to={"/missions"}
                  className="block px-4 py-2 text-sm text-[#00723e] font-bold hover:bg-emerald-50 hover:text-emerald-700 transition-colors"
                >
                  Mission
                </Link>
                <Link
                  key={"comites"}
                  to={"/comites"}
                  className="block px-4 py-2 text-sm text-[#00723e] font-bold hover:bg-emerald-50 hover:text-emerald-700 transition-colors"
                >
                  Comités
                </Link>
                <Link
                  key={"pays"}
                  to={"/pays/affiliés"}
                  className="block px-4 py-2 text-sm text-[#00723e] font-bold hover:bg-emerald-50 hover:text-emerald-700 transition-colors"
                >
                  Pays Affiliés
                </Link>
            </motion.div>
          )}
        </AnimatePresence>
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