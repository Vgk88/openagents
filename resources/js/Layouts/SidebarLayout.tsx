
import { IconMessage } from "@/Components/ui/icons";
import { HomeIcon } from "@heroicons/react/24/outline";
import { Link } from "@inertiajs/react";

export const SidebarLayout = ({ children }) => {
  return (
    <div className="h-dscreen w-full md:h-screen">
      <div className="flex h-dscreen bg-neutral-50">
        <div className="space-y-4 hidden w-22 flex-col items-center border-r border-neutral-300 p-3 pt-5 lg:flex">
          <Link href="/chat" className="cursor-pointer mb-1 flex h-16 w-16 flex-col items-center justify-center rounded-xl text-neutral-900 hover:bg-neutral-200 hover:text-neutral-900">
            <IconMessage className="h-6 w-6" />
            <div className="t-label mt-2">Chat</div>
          </Link>
          <Link href="/nodes" className="cursor-pointer mb-1 flex h-16 w-16 flex-col items-center justify-center rounded-xl text-neutral-900 hover:bg-neutral-200 hover:text-neutral-900">
            <svg width="24" height="24" version="1.1" viewBox="0 0 1200 1200" xmlns="http://www.w3.org/2000/svg">
              <path d="m990 704.4c-31.199 0-60 12-80.398 32.398l-150-86.398c4.8008-15.602 8.3984-32.398 8.3984-49.199 0-18-3.6016-33.602-8.3984-49.199l150-86.398c21.602 19.199 49.199 32.398 80.398 32.398 66 0 120-54 120-120s-54-120-120-120-120 54-120 120c0 8.3984 1.1992 16.801 2.3984 25.199l-150 86.398c-22.801-24-52.801-42-86.398-50.398v-175.2c48-15.602 84-60 84-114 0-66-54-120-120-120s-120 54-120 120c0 54 34.801 98.398 84 114v172.8c-33.602 7.1992-63.602 25.199-85.199 49.199l-150-86.398c1.1992-8.3984 2.3984-16.801 2.3984-25.199 0-66-54-120-120-120s-120 54-120 120 54 120 120 120c31.199 0 60-12 80.398-32.398l150 86.398c-4.8008 15.602-8.3984 32.398-8.3984 49.199 0 18 3.6016 33.602 8.3984 49.199l-150 86.398c-21.602-19.199-49.199-32.398-80.398-32.398-66 0-120 54-120 120s54 120 120 120 120-54 120-120c0-8.3984-1.1992-16.801-2.3984-25.199l150-86.398c22.801 24 51.602 42 85.199 49.199v177.6c-48 15.602-84 60-84 114 0 66 54 120 120 120s120-54 120-120c0-54-34.801-98.398-84-114v-172.8c33.602-7.1992 63.602-25.199 86.398-50.398l150 86.398c-1.1992 8.3984-2.3984 16.801-2.3984 25.199 0 66 54 120 120 120s120-54 120-120-54-120-120-120zm0-376.8c26.398 0 46.801 21.602 46.801 46.801 0 25.199-21.602 46.801-46.801 46.801-26.398 0-46.801-21.602-46.801-46.801 0-25.203 20.402-46.801 46.801-46.801zm-780 94.797c-26.398 0-46.801-21.602-46.801-46.801 0-25.199 21.602-46.801 46.801-46.801 26.398 0 46.801 21.602 46.801 46.801 0 25.203-20.402 46.801-46.801 46.801zm0 450c-26.398 0-46.801-21.602-46.801-46.801 0-26.398 21.602-46.801 46.801-46.801 26.398 0 46.801 21.602 46.801 46.801 1.1992 25.203-20.402 46.801-46.801 46.801zm390-769.2c26.398 0 46.801 21.602 46.801 46.801s-21.602 46.801-46.801 46.801-46.801-21.602-46.801-46.801 20.402-46.801 46.801-46.801zm0 993.6c-26.398 0-46.801-21.602-46.801-46.801 0-26.398 21.602-46.801 46.801-46.801s46.801 21.602 46.801 46.801-20.402 46.801-46.801 46.801zm0-403.2c-51.602 0-93.602-42-93.602-93.602s42-93.602 93.602-93.602 93.602 42 93.602 93.602-42 93.602-93.602 93.602zm390 178.8c-26.398 0-46.801-21.602-46.801-46.801 0-26.398 21.602-46.801 46.801-46.801 26.398 0 46.801 21.602 46.801 46.801 0 25.203-21.602 46.801-46.801 46.801z" />
            </svg>
            <div className="t-label mt-2">Agent</div>
          </Link>
          <a className="cursor-pointer mb-1 flex h-16 w-16 flex-col items-center justify-center rounded-xl text-neutral-900 hover:bg-neutral-200 hover:text-neutral-900">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"><path d="M12 12C10.9 12 9.95833 11.6083 9.175 10.825C8.39167 10.0417 8 9.1 8 8C8 6.9 8.39167 5.95833 9.175 5.175C9.95833 4.39167 10.9 4 12 4C13.1 4 14.0417 4.39167 14.825 5.175C15.6083 5.95833 16 6.9 16 8C16 9.1 15.6083 10.0417 14.825 10.825C14.0417 11.6083 13.1 12 12 12ZM18 20H6C5.45 20 4.97933 19.8043 4.588 19.413C4.196 19.021 4 18.55 4 18V17.2C4 16.6333 4.146 16.1123 4.438 15.637C4.72933 15.1623 5.11667 14.8 5.6 14.55C6.63333 14.0333 7.68333 13.6457 8.75 13.387C9.81667 13.129 10.9 13 12 13C13.1 13 14.1833 13.129 15.25 13.387C16.3167 13.6457 17.3667 14.0333 18.4 14.55C18.8833 14.8 19.2707 15.1623 19.562 15.637C19.854 16.1123 20 16.6333 20 17.2V18C20 18.55 19.8043 19.021 19.413 19.413C19.021 19.8043 18.55 20 18 20Z"></path></svg>
            <div className="t-label mt-2">Profile</div>
          </a>
        </div>
        <div className="relative grow overflow-x-auto flex flex-col">
          {children}
        </div>
      </div>
    </div>
  )
}
