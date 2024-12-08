
import { Separator } from "./ui/separator";


export const HeaderSticky=()=>{




    return (
        <div className={`sticky  top-[0rem] bg-[#00723e] h-24 flex gap-5 flex-row justify-center items-center px-12 border border-white border-[0.1rem]  top-[-2rem] z-[9999] `}>
        <div className=''>
          <div className='flex  flex-row justify-between items-end gap-8'>
              <h2 className='text-2xl cursor-pointer font-semibold text-white'>La FISF</h2>
              <Separator className='bg-white h-7 w-1' orientation='vertical'/>
          </div>
        </div>
        <div className=''>
            <div className='flex flex-row justify-between items-end gap-8'>
                <h2 className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Actualités</h2>
                  <Separator className='bg-white h-7 w-1' orientation='vertical' />
              </div>
            
        </div>
        <div className=''>
        <div className='flex flex-row justify-between items-end gap-8'>
            <h2 className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Calendrier</h2>
              <Separator className='bg-white h-7 w-1' orientation='vertical' />
          </div>
        </div>
        <div className=''>
        <div className='flex flex-row justify-between items-end gap-8'>
            <h2 className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Classement</h2>
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
    );
}